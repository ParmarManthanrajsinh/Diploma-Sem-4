// Write a program in Java to reverse the digits 
// of a number using while loop

public class ReverseDigits {

    public static void main(String[] args) {
        int n = 1034;
        int temp = n;
        int r = 0;

        while (temp != 0) {
            r *= 10;
            r += temp % 10;
            temp /= 10;
        }

        System.out.println("original: " + n);
        System.out.println("reverse: " + r);
    }
}
