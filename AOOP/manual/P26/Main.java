class EvenThread extends Thread {
    public void run() {
        for (int i = 0; i <= 200; i += 2) {
            System.out.println("Even: " + i);
        }
    }
}

class OddThread extends Thread {
    public void run() {
        for (int i = 1; i <= 200; i += 2) {
            System.out.println("Odd: " + i);
        }
    }
}

public class Main {
    public static void main(String[] args) {
        EvenThread evenThread = new EvenThread();
        OddThread oddThread = new OddThread();
        evenThread.start();
        oddThread.start();
    }
}