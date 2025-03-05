import java.util.HashMap;

public class Main {
    public static void main(String[] args) {
        HashMap<Integer, String> students = new HashMap<>();

        students.put(101, "John Smith");
        students.put(102, "Parmar Manthan");
        students.put(103, "Parmar Dhaval");
        students.put(104, "Maradiya Dhyey");
        students.put(105, "David Wilson");

        System.out.println("Student Database:");
        
        for (Integer enrollmentNo : students.keySet()) {
            String name = students.get(enrollmentNo);
            System.out.println("Enrollment No: " + enrollmentNo + ", Name: " + name);
        }

        int searchEnrollment = 102;
        System.out.println("\nSearching for enrollment no " + searchEnrollment);
        System.out.println("Student Found: " + students.get(searchEnrollment));
    }
}