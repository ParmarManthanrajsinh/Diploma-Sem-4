// Write  a  program  in  Java  which  has  a  class 
// Student having two instance variables 
// enrollmentNo and name. Create 3 objects of 
// Student  class  in  main  method  and  display 
// student’s name.

public class StudentClass {

    public static class Student {
        long enrollmentNo;
        String name;

        Student(long enroll, String nameString) {
            enrollmentNo = enroll;
            name = nameString;
        }

        void Display() {
            System.out.println("Enrollment No: " + enrollmentNo);
            System.out.println("Name: " + name);
        }
    }

    public static void main(String[] args) {
        Student s1 = new Student(23602030701L, "Ohm");
        s1.Display();
        Student s2 = new Student(23602030702L, "Ram");
        s2.Display();
        Student s3 = new Student(23602030703L, "Bob");
        s3.Display();
    }
}
