# Programming Foundations: Design Patterns

Fundamentals properties of Obeject-Oriented Design

* Inherintece
* Polymorphism
* Abstraction
* Encapsulation

Design Patterns provide paths to solutions for some of the most common object-oriented design conundrums.

## Benefits

* Not reivent the wheel
* Building resilient code
* Preparing for future additions

| **Design Principles**  | **Design Patterns** |
| -------------          |:-------------:      |
| General guidelines     | Specific Solutions  |

> **Encapsulate your varies**  
> Identify the aspects of your application that vary and separate them from what stays the same.
>
> * if some aspect of your code is changing , that's a sign you should pull it out and separete it
> * By separeting out the parts of your code that change, you can extend or alter them without affecting the rest of your code
> * This principle is fundamental to almost every design pattern

| **Principle**           | **Pattern**           |
| ----------------------- | :-------------------: |
| Encapsulate what varies | The Strategy Pattern  |
|                         | The Iterator Pattern  |
|                         | The Factory Pattern   |

### The Strategy Pattern

> **Program to an interface, NOT an Implementation**  
> Clients remain unaware of the specific types of objects they use, as long as the objects adhere to the interface that clients expect.

![alt text](https://github.com/morvanabonin/design_patterns/blob/master/img/strategy_pattern.png "Strategy Pattern")

> **The Strategy Pattern**  
> This Pattern defines a family of algorithms, encapsulate each one, and makes them interchangeable.
> This lets the algorithm vary independently from clients that use it.

#### HAS-A Is Better Than IS-A

* We're using a HAS-A relationship
  * Each duck has a FlyBehavior and a QuackBehavior

* Instead of inheriting behavior, we're composing it
  * A duck is composed with a fly behavior and a quack behavior

> **Favor Composition over Inheritance**  
> Classes should achieve code reuse using composition rather than inheritance from a superclass.

### The Adapter Pattern

[<img src="https://github.com/morvanabonin/design_patterns/blob/master/img/adapter_pattern.png" height="250" width="600"/>](https://github.com/morvanabonin/design_patterns/blob/master/img/adapter_pattern.png)

The Adapter class handles the work of translating the request to the new Vendor class.

> **The Adapter Pattern**  
> This Pattern converts the interface of a class into another interface that clients expect.
> It allows classes to work together that couldn't otherwise because of incompatible interfaces. 

![alt text](https://github.com/morvanabonin/design_patterns/blob/master/img/adapter_pattern2.png "Adapter Pattern")

> **Adapters Use Composition**  
> 
> * The client is composed with the class with the target interface
> * The adapter is composed with the adaptee
> * The adapter delegates calls to the adaptee, and returns any needed value

### The Observe Pattern

> **Loose Coupling**  
> Strive for loosely coupled designs between objects that interact.

> **The Observer Pattern**  
> This Pattern defines a one-to-many dependency between objects so that when one object changes state, all of its
> dependents are notified and updated automatically.