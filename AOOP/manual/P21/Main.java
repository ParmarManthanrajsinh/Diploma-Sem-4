final class MyFinalClass {
    void display() {
        System.out.println("This is a final class.");
    }
}

public class Main{
    public static void main(String[] args) {
        MyFinalClass obj = new MyFinalClass();
        obj.display();
    }
}