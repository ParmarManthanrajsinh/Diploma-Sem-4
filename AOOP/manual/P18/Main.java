// Write a program in Java which has a class 
// Car having two instance variables topSpeed 
// and  name.  Override  toString()  method  in 
// Car class. Create 5 instances of Car class and 
// print the instances.

class Car {
    int topSpeed;
    String name;

    Car(String name, int topSpeed) {
        this.name = name;
        this.topSpeed = topSpeed;
    }

    @Override
    public String toString() {
        return String.format("Car %s has a top speed of %d km/h", name, topSpeed);
    }
}

public class Main {
    public static void main(String[] args) {
        Car c1 = new Car("Ferrari", 350);
        Car c2 = new Car("Lamborghini", 340);
        Car c3 = new Car("Bugatti", 420);
        Car c4 = new Car("McLaren", 330);
        Car c5 = new Car("Porsche", 310);

        System.out.println(c1);
        System.out.println(c2);
        System.out.println(c3);
        System.out.println(c4);
        System.out.println(c5);
    }
}
