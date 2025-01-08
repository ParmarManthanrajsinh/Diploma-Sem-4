
// Write a program in Java to find maximum of 
// three numbers using conditional operator.
import java.util.Scanner;

public class MaxOf3 {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.println("Enter first number: ");
        int a = sc.nextInt();
        System.out.println("Enter second number: ");
        int b = sc.nextInt();
        System.out.println("Enter third number: ");
        int c = sc.nextInt();

        int max = (a > b && a > c) ? a : ((b > c) ? b : c);

        System.out.println("The maximum number is " + max);

        sc.close();
    }
}
