// Write a program in Java to demonstrate the 
// constructor overloading.

class Add {

    Add(int x, int y) {
        System.out.println(x + " + " + y + " = " + (x + y));
    }

    Add(int x, int y, int z) {
        System.out.println(x + " + " + y + " + " + y + " = " + (x + y + z));
    }

}

public class Main {
    public static void main(String[] args) {
        Add add = new Add(3, 5);
        Add add1 = new Add(3, 5, 7);
    }
}
