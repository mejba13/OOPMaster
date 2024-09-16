# OOPMaster

This project demonstrates key Object-Oriented Programming (OOP) concepts using PHP. The project includes examples and explanations of important OOP principles such as constructors, destructors, encapsulation, inheritance, and more.

## Table of Contents
- [Overview](#overview)
- [Files](#files)
  - [constructor-and-destructor.php](#constructor-and-destructorphp)
  - [encapsulation.php](#encapsulationphp)
  - [inheritence.php](#inheritencephp)
  - [inheritence-deep.php](#inheritence-deepphp)
  - [object-and-class.php](#object-and-classphp)
  - [properties-and-method.php](#properties-and-methodphp)
- [Getting Started](#getting-started)
- [How to Run](#how-to-run)

## Overview
This project covers the following key OOP concepts:
- **Constructor & Destructor**: Managing object initialization and cleanup.
- **Encapsulation**: Hiding the internal state of an object and exposing only necessary methods.
- **Inheritance**: Reusing code by extending base classes.
- **Deep Inheritance**: Exploring deeper inheritance chains and method overriding.
- **Object and Class**: Basic object and class creation.
- **Properties and Methods**: Understanding how to use class properties and methods.

## Files
### constructor-and-destructor.php
This file demonstrates how constructors and destructors work in PHP. The constructor method initializes object properties, and the destructor is triggered when the object is no longer in use.

### encapsulation.php
Encapsulation example where we restrict direct access to class properties and use getter and setter methods to manage internal data.

### inheritence.php
A basic example of inheritance, showing how one class can inherit properties and methods from another class.

### inheritence-deep.php
An example of deep inheritance, where multiple levels of class inheritance are shown, and how methods can be overridden or extended.

### object-and-class.php
This file covers the creation of a simple class and object, demonstrating the basics of object-oriented programming in PHP.

### properties-and-method.php
An introduction to using class properties and methods. Demonstrates how properties hold data and methods define behaviors for objects.

## Getting Started
### Prerequisites
- PHP version 7.4 or above
- A local development environment such as [Herd](https://herdphp.com) or [Laravel Valet](https://laravel.com/docs/valet)

### Installation
1. Clone the repository:
    ```bash
    git clone https://your-repo-url.git
    cd OOPMaster
    ```

2. Start your local PHP server using Herd or any other preferred tool:
    ```bash
    herd link
    herd secure
    ```

## How to Run
1. Access the project from your browser by navigating to the local domain provided by Herd:
    ```
    http://OOPMaster.test
    ```

2. Run individual PHP files to see the OOP concepts in action. For example, to run the constructor and destructor demo:
    ```
    http://OOPMaster.test/constructor-and-destructor.php
    ```

## License
This project is licensed under the MIT License.
