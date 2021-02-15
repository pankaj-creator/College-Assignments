import java.util.Scanner;

public class tringle{
    public static void main(String[] args) {
        Scanner sc= new Scanner(System.in);
        int n=sc.nextInt();
        int i=1;
        while(i<=n){
            int  space=1;
            while(space<=n-i){
                   System.out.print(" ");
                   space++;
            }
            int k=1;
            while(k<=2*i-1){
                System.out.print("*");
                k++;
            }
            System.out.println();

        
            i++;
        }
    }
}