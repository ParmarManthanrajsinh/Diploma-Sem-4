// Write a program in Java to reverse the digits 
// of a number using while loop

import java.util.Scanner;

public class ReverseDigits {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter first number: ");

        int n = sc.nextInt();
        int temp = n;
        int r = 0;

        while (temp != 0) {
            r *= 10;
            r += temp % 10;
            temp /= 10;
        }

        System.out.println("original: " + n);
        System.out.println("reverse: " + r);

        sc.close();
    }
}
