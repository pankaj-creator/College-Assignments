import java.util.*;

public class Solution
{
public static void main(String[] args)
{
    String firstString, secondString, thirdString;

    Scanner Keyboard = new Scanner(System.in);

    System.out.println("Enter three string");
    System.out.println("Note: The strings is enter in seprate line.");
    firstString = Keyboard.nextLine();
    secondString = Keyboard.nextLine();
    thirdString = Keyboard.nextLine();

    String[] array = new String[] {firstString, secondString, thirdString};

    Arrays.sort(array);

    System.out.println("The second string in lexicographic order: " + array[0] + array[1] + array[2]);
}
}