// Write  a  program  in  Java to  generate  first n 
// prime numbers. 

import java.util.Scanner;

public class PrimeNumbers {

    public static boolean isPrime(int n) {
        if (n == 0) {
            return false;
        }
        for (int i = 2; i <= Math.sqrt(n); i++) {
            if (n % i == 0) {
                return false;
            }
        }
        return true;
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("Enter the number: ");
        int n = sc.nextInt();

        int count = 0;
        int num = 2;

        System.out.println("First " + n + " prime numbers are:");
        while (count < n) {
            if (isPrime(num)) {
                System.out.print(num + " ");
                count++;
            }
            num++;
        }
        sc.close();
    }
}
