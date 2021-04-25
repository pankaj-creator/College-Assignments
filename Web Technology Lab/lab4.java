import java.io.*;

class lab4 {
    static String n;
    static int l;

    public static void main(String args[]) throws IOException {
        lab4 call = new lab4();
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        System.out.print("Enter a Name : ");
        n = br.readLine();
        l = n.length();
        call.init();
    }

    public void init() {
        int c = 0;
        char b = 0, d = 0;
        String e = "";
        for (int i = 0; i < l; i++) {
            if (n.charAt(i) == ' ') {
                c++;
                if (c == 1)
                    b = n.charAt(i + 1);
                if (c == 2)
                    d = n.charAt(i + 1);
                e = n.substring(i + 1);
            }
        }
        char f = n.charAt(0);
        System.out.println(f + "." + b + "." + e);

    }
}