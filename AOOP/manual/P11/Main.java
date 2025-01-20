// Write a program in Java which has a class 
// Shape having 2 overloaded methods 
// area(float radius) and area(float length, 
// float  width).  Display  the  area  of  circle  and 
// rectangle using overloaded methods.

class Shape {
    void area(float radius) {
        System.out.println("Area of Circle: " + (3.14 * radius * radius));
    }

    void area(float length, float width) {
        System.out.println("Area of Rectangle: " + (length * width));
    }
}

public class Main {
    public static void main(String[] args) {

        Shape shape = new Shape();

        shape.area(5.0f);
        shape.area(4.0f, 6.0f);

    }
}
