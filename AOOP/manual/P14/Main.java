// Write  a  program  in  Java  to  demonstrate 
// single inheritance 

class Base {
    void print_b() {
        System.out.println("This is base class");
    }
}

class Derived extends Base {
    void print_d() {
        System.out.println("This is derived class");
    }
}

public class Main {
    public static void main(String[] args) {
        Base b = new Base();
        Derived d = new Derived();

        b.print_b();
        d.print_b();
        d.print_d();
    }
}
