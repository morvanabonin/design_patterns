## Programming Foundations: Design Patterns

Fundamentals properties of Obeject-Oriented Design
* Inherintece
* Polymorphism
* Abstraction
* Encapsulation

Design Patterns provide paths to solutions for some of the most common object-oriented design conundrums.

### Benefits
* Not reivent the wheel
* Building resilient code
* Preparing for future additions

| **Design Principles**  | **Design Patterns** |
| -------------          |:-------------:      |
| General guidelines     | Specific Solutions  |

> **Encapsulate your varies**  
> Identify the aspects of your application that vary and separate them from what stays the same.
> * if some aspect of your code is changing , that's a sign you should pull it out and separete it
> * By separeting out the parts of your code that change, you can extend or alter them without affecting the rest of your code
> * This principle is fundamental to almost every design pattern

| **Principle**            | **Pattern**           |
| -------------			       | :-------------:       |
| Encapsulate what varies  | The Strategy Pattern  |
|						               | The Iterator Pattern  |
|						               | The Factory Pattern   |

### The Strategy Pattern

> **Program to an interface, NOT an Implementation**  
> Clients remain unaware of the specific types of objects they use, as long as the objects adhere to the interface that clients expect.

![alt text](https://github.com/morvanabonin/design_patterns/img/strategy_pattern.png "Strategy Pattern")

> **The Strategy Pattern**  
> This Pattern defines a family of algorithms, encapsulate each one, and makes them interchangeable.
> This lets the algorithm vary independently from clients that use it.
