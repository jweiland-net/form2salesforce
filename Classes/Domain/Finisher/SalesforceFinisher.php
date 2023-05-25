<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/form2salesforce.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\Form2salesforce\Domain\Finisher;

use GuzzleHttp\Exception\GuzzleException;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use TYPO3\CMS\Core\Http\RequestFactory;
use TYPO3\CMS\Form\Domain\Finishers\AbstractFinisher;
use TYPO3\CMS\Form\Domain\Model\FormElements\FormElementInterface;

/**
 * Finisher to send data from contact form to salesforce API endpoint
 */
class SalesforceFinisher extends AbstractFinisher implements LoggerAwareInterface
{
    use LoggerAwareTrait;

    protected RequestFactory $requestFactory;

    public function __construct(RequestFactory $requestFactory)
    {
        // parent::__construct() not needed. Deprecated since TYPO3 11
        $this->requestFactory = $requestFactory;
    }

    protected function executeInternal()
    {
        $options = [];
        if (isset($this->options['targetUrl'])) {
            $options[] = $this->options;
        } else {
            $options = $this->options;
        }

        foreach ($options as $optionKey => $option) {
            $this->options = $option;
            $this->process($optionKey);
        }
    }

    /**
     * Send form data to salesforce API endpoint
     */
    protected function process(int $iterationCount): void
    {
        if (
            $this->isEnabled()
            && isset($this->options['targetUrl'])
            && $this->options['targetUrl'] !== ''
        ) {
            $options = [];
            $this->addBasicAuth($options);
            $this->addSalesforceOptions($options);
            $this->addFormParams($options);

            try {
                $response = $this->requestFactory->request(
                    $this->options['targetUrl'],
                    'POST',
                    $options
                );
                if ($response->getStatusCode() !== 200) {
                    $this->logger->alert(
                        'Response of salesforce API returned a HTTP status different than 200. '
                        . 'Please check configuration in yaml file and check if targetUrl is correct.'
                    );
                }
            } catch (GuzzleException $guzzleException) {
                $this->logger->alert(
                    'Failed sending data of form to salesforce in SalesforceFinisher. '
                    . 'Please check configuration in yaml file and check if targetUrl is correct.'
                );
            }
        }
    }

    protected function addBasicAuth(&$options): void
    {
        if (
            isset($this->options['username'], $this->options['password'])
            && $this->options['username'] !== ''
            && $this->options['password'] !== ''
        ) {
            $options['auth'] = [
                $this->options['username'],
                $this->options['password'],
            ];
        }
    }

    protected function addSalesforceOptions(array &$options): void
    {
        $salesforceOptions = [
            'orgid',
            'recordType',
            'type',
            'origin',
        ];

        foreach ($salesforceOptions as $salesforceOption) {
            if (isset($this->options[$salesforceOption]) && $this->options[$salesforceOption] !== '') {
                $options[$salesforceOption] = $this->options[$salesforceOption];
            }
        }
    }

    protected function addFormParams(array &$options): void
    {
        foreach ($this->getFormValues() as $elementIdentifier => $formValue) {
            $element = $this->getElementByIdentifier($elementIdentifier);
            if ($element->getType() === 'Honeypot') {
                continue;
            }

            if (is_string($formValue)) {
                $options[$elementIdentifier] = $formValue;
            }
        }
    }

    /**
     * Returns the values of the submitted form
     */
    private function getFormValues(): array
    {
        return $this->finisherContext->getFormValues();
    }

    private function getElementByIdentifier(string $elementIdentifier): ?FormElementInterface
    {
        return $this
            ->finisherContext
            ->getFormRuntime()
            ->getFormDefinition()
            ->getElementByIdentifier($elementIdentifier);
    }
}
