class MyThread extends Thread {
    private long delay;

    public MyThread(long delay) {
        this.delay = delay;
    }

    public void run() {
        try {
            while (true) {
                System.out.println(getName());
                Thread.sleep(delay);
            }
        } catch (Exception e) {
            System.out.println(getName() + " Error");
        }
    }
}

public class Main {
    public static void main(String[] args) {
        MyThread thread1 = new MyThread(1000);
        MyThread thread2 = new MyThread(2000);

        thread1.start();
        thread2.start();
    }
}