import java.util.Scanner;
public class lab3
{
   public static void main(String args[])
   {
        String str, strWithoutSpace;
        int i;
        Scanner scan = new Scanner(System.in);
        System.out.print("Enter a Sentence : ");
        str = scan.nextLine();
        strWithoutSpace = str.replaceAll(" ", "");
        System.out.println(strWithoutSpace);
   }
}