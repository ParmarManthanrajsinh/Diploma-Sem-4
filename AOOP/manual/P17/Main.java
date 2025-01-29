class Gun {
    public String GunName;

    Gun(String name) {
        GunName = name;
    }

    void PrintDetails() {
        System.out.println("Gun name is " + GunName);
    }
}

class SMG extends Gun {
    SMG(String name) {
        super(name);
    }

    void PrintDetails() {
        System.out.println("Gun type SMG");
        System.out.println("Gun name is " + GunName);
    }
}

class AR extends Gun {
    AR(String name) {
        super(name);
    }

    void PrintDetails() {
        System.out.println("Gun type AR");
        System.out.println("Gun name is " + GunName);
    }
}

public class Main {
    public static void main(String[] args) {
        Gun AK47 = new AR("AK47");
        AK47.PrintDetails();

        Gun UMP = new SMG("UMP");
        UMP.PrintDetails();
    }
}