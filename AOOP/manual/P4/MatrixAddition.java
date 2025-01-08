
// Write  a  program  in  Java  to  add  two  3*3 
// matrices.

public class MatrixAddition {

    public static void main(String[] args) {

        int[][] matrix1 = {
                { 1, 2, 3 },
                { 4, 5, 6 },
                { 7, 8, 9 }
        };

        int[][] matrix2 = {
                { 1, 2, 3 },
                { 4, 5, 6 },
                { 7, 8, 9 }
        };

        System.out.println("First Matrix:");
        for (int[] row : matrix1) {
            for (int element : row) {
                System.out.printf("%d ", element);
            }
            System.out.println();
        }

        System.out.println("Second Matrix:");
        for (int[] row : matrix2) {
            for (int element : row) {
                System.out.printf("%d ", element);
            }
            System.out.println();
        }

        int[][] result = new int[matrix1.length][matrix1.length];
        for (int i = 0; i < matrix1.length; i++) {
            for (int j = 0; j < matrix1[0].length; j++) {
                result[i][j] = matrix1[i][j] + matrix2[i][j];
            }
        }

        System.out.println("Result of Addition:");
        for (int[] row : result) {
            for (int element : row) {
                System.out.printf("%d ", element);
            }
            System.out.println();
        }
    }
}