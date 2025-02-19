# Introduction

I know this package is weird, but i created this because i want to learn to create my first PHP package and publish on Packagist.

## About

This is just simple tool to check if the number is odd or not, and return boolean.

## Installation

To install this package run

```bash
  composer require kaia/is-odd
```

Now you can use it into your PHP project

```bash
  use Kaia\IsOdd;

  IsOdd::check($integer) // IsOdd::check(714) <= return false
```
