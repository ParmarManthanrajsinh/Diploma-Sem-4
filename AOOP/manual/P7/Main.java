// Write a program in Java which has a class 
// Rectangle having two instance variables 
// height  and  weight.  Initialize  the  class  using 
// constructor

public class Main {

    public static class Rectangle {
        int height;
        int weight;

        Rectangle(int h, int w) {
            height = h;
            weight = w;
        }
    }

    public static void main(String[] args) {
        Rectangle rect = new Rectangle(50, 100);
        System.out.println("Weight : " + rect.weight);
        System.out.println("Height : " + rect.height);
    }
}
