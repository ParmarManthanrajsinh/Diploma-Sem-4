class A {
    void displayA() {
        System.out.println("Inside class A");
    }
}

class B extends A {
    void displayB() {
        System.out.println("Inside class B");
    }
}

class C extends A {
    void displayC() {
        System.out.println("Inside class C");
    }
}

public class Main {

    public static void main(String[] args) {
        A objA = new A();
        objA.displayA();

        B objB = new B();
        objB.displayA();
        objB.displayB();

        C objC = new C();
        objC.displayA();
        objC.displayC();
    }
}
