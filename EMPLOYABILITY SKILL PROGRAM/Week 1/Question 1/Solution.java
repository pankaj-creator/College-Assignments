public static void main(String[] args) {

    Scanner input = new Scanner(System.in);

    int counter = 0; // Initializes the counter

    System.out.printf("Enter first integer: "); // asks the user for the first integer
    int number1 = input.nextInt(); // stores users input for the first integer

    System.out.printf("Enter second integer: "); // asks the user for the second integer
    int number2 = input.nextInt(); // stores users input for the Second integer

    if (number1 % number2 == 0) // checks to see if number1 is a multiple of number2
         System.out.print("true"); // if so then print out "true"

         else
         System.out.print("false"); // otherwise print out "false"
    
}
