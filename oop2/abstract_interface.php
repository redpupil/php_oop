<?php include 'inc/header.php'; ?>
<h2>Topics: Differences between Abstract and Interface</h2>
<div class="content">
    <div class="topics">

    We can’t extend more than one abstract class while we can implement more than one interface.

    We can implement more than one interface to one class. In this case interface names should be separated by comma ,

    Same as classes we can extend the interface too using the extends keyword.

    I think you should use interfaces when you want a full implementation and use abstract classes when you want partial pieces for your design (for reusability)

        An abstract class can have shared state or functionality. An interface is only a promise to provide the state or functionality. A good abstract class will reduce the amount of code that has to be rewritten because it's functionality or state can be shared. The interface has no defined information to be shared

        If you anticipate creating multiple versions of your component, create an abstract class. Abstract classes provide a simple and easy way to version your components. By updating the base class, all inheriting classes are automatically updated with the change. Interfaces, on the other hand, cannot be changed once created. If a new version of an interface is required, you must create a whole new interface.
        If the functionality you are creating will be useful across a wide range of disparate objects, use an interface. Abstract classes should be used primarily for objects that are closely related, whereas interfaces are best suited for providing common functionality to unrelated classes.
        If you are designing small, concise bits of functionality, use interfaces. If you are designing large functional units, use an abstract class.
        If you want to provide common, implemented functionality among all implementations of your component, use an abstract class. Abstract classes allow you to partially implement your class, whereas interfaces contain no implementation for any members.


        <table>


            <tr>
                <td> Abstract Class</td>
                <td> Interface</td>
            </tr>
            <tr>
                <td>---------------------------------------------------------------------</td>
            </tr>
            <tr>
                <td>- abstract methods
                    - constants</td>
                <td>- abstract methods
                    - constants
                    - concrete methods
                    - concrete variables</td>
            </tr>
            <tr>
                <td>- public</td>
                <td>- public
                    - protected
                    - private
                    etc.</td>
            </tr>
            <tr>
                <td>The same class can implement more than 1 interface</td>
                <td>The child class can inherit only from 1 abstract class
                </td>
            </tr>
            <tr>
                <td>For abstract class a method must be declared as abstract. Abstract methods doesn’t have any implementation.</td>
                <td>For interface all the methods by default are abstract methods only. So one cannot declare variables or concrete methods in interfaces.</td>
            </tr>
            <tr>
                <td>The Abstract methods can declare with Access modifiers like public, internal, protected. When implementing in subclass these methods must be defined with the same (or a less restricted) visibility.</td>
                <td>All methods declared in an interface must be public.</td>
            </tr>
            <tr>
                <td>Abstract class can contain variables and concrete methods.</td>
                <td>Interfaces cannot contain variables and concrete methods except constants.</td>
            </tr>
            <tr>
                <td>A class can Inherit only one Abstract class and Multiple inheritance is not possible for Abstract class.	</td>
                <td>A class can implement many interfaces and Multiple interface inheritance is possible.</td>
            </tr>
        </table>


    </div>
</div>
<?php include 'inc/footer.php'; ?>