# TYPO3 Extension `form2salesforce`

[![CI](https://github.com/jweiland-net/form2salesforce/actions/workflows/ci.yml/badge.svg)](https://github.com/jweiland-net/form2salesforce/actions/workflows/ci.yml)

`form2salesforce` is an extension for TYPO3 CMS. It contains a finisher
class for EXT:form to send data of a form to salesforce API endpoint.

## 1 Features

* Send data of a EXT:form to salesforce API endpoint.

## 2 Usage

### 2.1 Installation

#### Installation using Composer

The recommended way to install the extension is using Composer.

Run the following command within your Composer based TYPO3 project:

```
composer require jweiland/form2salesforce
```

#### Installation as extension from TYPO3 Extension Repository (TER)

Download and install `form2salesforce` with the extension manager module.

### 2.2 Minimal setup

1) Include the static TypoScript of the extension.
2) Configure EXT:form as described in our documentation.
