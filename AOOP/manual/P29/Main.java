import java.util.HashSet;

public class Main {
    public static void main(String[] args) {
        HashSet<String> colors = new HashSet<String>();

        colors.add("Red");
        colors.add("Blue");
        colors.add("Green");
        colors.add("Yellow");
        colors.add("Purple");
        colors.add("Orange");

        System.out.println("Colors in the HashSet:");

        for(String color : colors) {
            System.out.println(color);
        }
    }
}