
// Write  a  program  in  Java  to  add  two  3*3 
// matrices.
public class Que {

    public static void main(String[] args) {

        int[][] matrice1 = {{1, 2, 3}, {4, 5, 6}, {7, 8, 9}};
        int[][] matrice2 = {{1, 2, 3}, {4, 5, 6}, {7, 8, 9}};

        System.out.println("First Matrice");

        for (int[] matrice : matrice1) {
            for (int j = 0; j < matrice1.length; j++) {
                System.out.print(matrice[j] + " ");
            }
            System.out.println();
        }

        System.out.println("Second Matrice");
        for (int[] matrice : matrice2) {
            for (int j = 0; j < matrice2.length; j++) {
                System.out.print(matrice[j] + " ");
            }
            System.out.println();
        }

        System.out.println("After Addition");
        for(int i = 0; i < matrice2.length; i++) {
            for (int j = 0; j < matrice2.length; j++) {
                matrice2[i][j] += matrice1[i][j];
                System.out.print(matrice2[i][j] + " ");
            }
            System.out.println();
        }
    }
}
