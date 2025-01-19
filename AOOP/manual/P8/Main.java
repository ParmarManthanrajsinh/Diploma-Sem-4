// Write  a  program  in  Java  demonstrate  the 
// use of “this” keyword.

class PrintNumber {
    int n;

    PrintNumber(int n) {
        this.n = n;
    }

    void print() {
        System.out.println("Value of n is: " + n);
    }
}

public class Main {

    public static void main(String[] args) {
        PrintNumber obj = new PrintNumber(10);
        obj.print();
    }
}