# UpDevTools

UpDevTools - An integrated suite of developer tools for your development environment including Kint and Whoops.

As a WordPress developer, you need development tools that put information in your hands.  We need one handy-dandy plugin that has all of our goodies to do our thang.  UpDevTools seeks to solve that problem.

## Why Integrated?

We believe in integration.  In order to do our jobs, we need a ton of tools and apps.  Right?  Every single project needs these tools.  Having an integrated approach means you only have one plugin to install and one to exclude from the deployment.  One plugin. One suite of tools.  All integrated together to give you the power you need to analyze, test, and tweak.

Our vision is to continue growing this plugin.  We will be adding more tools and features.  We invite you to come and join the developer community by contributing.  Let's make this plugin a powerful tool for us.

## Features

This plugin includes the following features:

1. [Composer](https://getcomposer.org/) - Dependency Manager for PHP
2. [Kint](https://github.com/kint-php/kint) - Awesome package that helps you to debug - forget `var_dump` and `print_r`. You are going to love Kint.
3. [Whoops](https://github.com/filp/whoops) - Oh man, you will wonder why this isn't built into PHP. When an error occurs, this displayer replaces out the PHP orange table and gives you information you can actually use.

## Installation

1. In terminal, navigate to `{path to your sandbox project}/wp-content/plugins`.
2. Then type in terminal: `git clone https://github.com/KnowTheCode/UpDevTools.git`.
3. Then type in terminal: `cd UpDevTools`
4. Then type in terminal: `composer install`.  Composer will then install all of the updated dependencies in the `assets/vendor` folder.
5. Log into your WordPress website.
6. Go to Plugins and activate the UpDevTools plugin.

## Add-ons

You are going to want to add on these plugins too:

1. [Query Monitor](https://github.com/johnbillion/query-monitor) - We use Query Monitor to analyze the queries.

## Contributions

See [Contributing](https://github.com/KnowTheCode/UpDevTools/CONTRIBUTING.md) for details.
