// Write a program in Java to demonstrate the 
// use of “static” keyword.

class Demo {
    static int count = 0;

    static void increment() {
        count++;
    }

    static int getCount() {
        return count;
    }
}

public class Main {
    public static void main(String[] args) {

        Demo.increment();
        Demo.increment();
        Demo.increment();

        System.out.println("Count: " + Demo.getCount());
    }
}
