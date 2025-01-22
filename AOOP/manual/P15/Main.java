// Write  a  program  in  Java  to  demonstrate 
// multilevel inheritance 

class Base1 {
    int data1;
}

class Base2 extends Base1 {
    int data2;
}

class Derived extends Base2 {
    int data3;

    Derived() {
        data1 = 10;
        data2 = 20;
        data3 = 30;
        System.out.println(data1 + " " + data2 + " " + data3);
    }
}

public class Main {
    public static void main(String[] args) {
        Derived d = new Derived();
    }
}
