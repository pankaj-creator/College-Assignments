import java.util.Scanner;

public class ArmstrongNumber
{
    public static void main(String args[])
    {
        int n, n1, n2, i, rem, temp, count=0;
        Scanner Sc = new Scanner(System.in);
        
        /* enter the interval between which number is printed */
        
        System.out.print("Enter the Interval :\n");
		
        System.out.print("Enter Starting Number :  ");
        n1 = Sc.nextInt();
        System.out.print("Enter Ending Number :  ");
        n2 = Sc.nextInt();
		
        // read numbers one-by-one and generate armstrong.
        for(i=n1+1; i<n2; i++)
        {
            temp = i;
            n = 0;
            while(temp != 0)
            {
                rem = temp%10;
                n = n + rem*rem*rem;
                temp = temp/10;
            }
            if(i == n)
            {
            	// print all the armstrong number between given interval.
                if(count == 0)
                {
                    System.out.print("Armstrong Numbers Between the Given Interval are : \n");
                }
                System.out.print(i + "  ");
                count++;
            }
        }
        // print if no number found.
        if(count == 0)
        {
            System.out.print("Armstrong Number not Found between the Given Interval.");
        }
    }
}
