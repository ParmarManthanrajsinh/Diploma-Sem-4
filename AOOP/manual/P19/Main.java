// Write a program in Java to implement 
// multiple inheritance using interfaces.

interface Animal {
    void eat();
}

interface Bird {
    void fly();
}

class Bat implements Animal, Bird {
    public void eat() {
        System.out.println("Bat eats insects.");
    }

    public void fly() {
        System.out.println("Bat can fly.");
    }
}

public class Main {
    public static void main(String[] args) {
        Bat bat = new Bat();
        bat.eat();
        bat.fly();
    }
}
