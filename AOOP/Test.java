class MyThread implements Runnable{
    public void run(){
        System.out.println("MyThread running");
    }
}

public class Test {
    public static void main(String[] args) {
        MyThread myThread = new MyThread();
        myThread.run();
    }
}
