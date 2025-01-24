import java.util.Scanner;

public class Main {

    public static int calculateLovePercentage(String name1, String name2) {
        String combinedNames = name1 + name2;
        int sum = 0;

        // Sum the ASCII values of each character in the combined names
        for (int i = 0; i < combinedNames.length(); i++) {
            sum += combinedNames.charAt(i);
        }

        // Calculate a love percentage between 0 and 100
        return sum % 101;
    }

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        while (true) {
            // Get input from the user
            System.out.print("Enter the first name: ");
            String name1 = scanner.nextLine();

            System.out.print("Enter the second name: ");
            String name2 = scanner.nextLine();

            // Calculate love percentage
            int lovePercentage = calculateLovePercentage(name1, name2);

            // Display the result
            System.out
                    .println("The love percentage between " + name1 + " and " + name2 + " is: " + lovePercentage + "%");
        }

    }
}