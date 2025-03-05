import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        System.out.println("Enter a number you to divide with 5: ");
        int number = 5;

        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();

        try {
            int result = number / n;
            System.out.println("Result: " + result);
        } catch (ArithmeticException e) {
            System.out.println("Error: " + e);
        }
    }
}