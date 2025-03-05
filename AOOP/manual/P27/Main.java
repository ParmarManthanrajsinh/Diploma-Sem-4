// Write a program in Java to perform read and 
// write operations on a Text file. 

import java.io.File;
import java.io.FileWriter;
import java.io.FileReader;

public class Main {
    public static void main(String[] args) {
        File file = new File("file.txt");

        try {
            FileWriter writer = new FileWriter(file);
            writer.write("Hello World!");
            writer.close();
            System.out.println("File written successfully!");
        } catch (Exception e) {
            System.out.println("An error occurred!");
            e.printStackTrace();
        }

        try {
            FileReader reader = new FileReader(file);
            int i;
            while ((i = reader.read()) != -1) {
                System.out.printf("%c", i);
            }
            reader.close();
        } catch (Exception e) {
            System.out.println("An error occurred!");
            e.printStackTrace();
        }
    }
}