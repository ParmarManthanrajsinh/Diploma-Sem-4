import java.util.ArrayList;
import java.util.LinkedList;

public class Main {
    public static void main(String[] args) {
        ArrayList<String> weekdays = new ArrayList<>();
        weekdays.add("Monday");
        weekdays.add("Tuesday");
        weekdays.add("Wednesday");
        weekdays.add("Thursday");
        weekdays.add("Friday");
        weekdays.add("Saturday");
        weekdays.add("Sunday");

        LinkedList<String> months = new LinkedList<>();
        months.add("January");
        months.add("February");
        months.add("March");
        months.add("April");
        months.add("May");
        months.add("June");
        months.add("July");
        months.add("August");
        months.add("September");
        months.add("October");
        months.add("November");
        months.add("December");

        System.out.println("Weekdays (ArrayList):");
        for (String day : weekdays) {
            System.out.println(day);
        }

        System.out.println("\nMonths (LinkedList):");
        for (String month : months) {
            System.out.println(month);
        }
    }
}