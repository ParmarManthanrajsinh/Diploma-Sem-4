abstract class Shape {
    abstract void area();
}

class Triangle extends Shape {
    private float base, height;

    public Triangle(float base, float height) {
        this.base = base;
        this.height = height;
    }

    public void area(){
        System.out.println("Area of Triangle: " + (base * height) / 2);
    }
}

class Rectangle extends Shape{
    private float length, height;

    Rectangle(float length, float height) {
        this.height = height;
        this.length = length;
    }
    
    public void area(){
        System.out.println("Area of Rectangle: " + length * height);
    }
}

class Circle extends Shape{
    private float radius;

    Circle(float radius){
        this.radius = radius;
    }

    public void area(){
        System.out.println("Area of Circle: " + (radius * radius * 3.14f));
    }
}

public class Main {
    public static void main(String[] args) {
        Shape obj1 = new Triangle(2, 5);
        Shape obj2 = new Rectangle(5, 2);
        Shape obj3 = new Circle(5);

        obj1.area();
        obj2.area();
        obj3.area();
    }
}
