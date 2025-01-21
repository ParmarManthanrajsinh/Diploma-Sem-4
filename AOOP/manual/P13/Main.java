public class Main {
    public static void main(String[] args) {
        String text = "Hello Java World";

        System.out.println("Character at index 6: " + text.charAt(6));

        System.out.println("Contains 'Java': " + text.contains("Java"));

        String formatted = String.format("Welcome, %s!", "User");
        System.out.println("Formatted string: " + formatted);

        System.out.println("Length of string: " + text.length());

        String parts[] = text.split(" ");
        System.out.println("Split parts:");
        for (String part : parts) {
            System.out.println(part);
        }
    }
}
