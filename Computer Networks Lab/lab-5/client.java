import java.io.*;
import java.net.*;
class client{
	public static void main(String args[]){
		try{			
			Socket skt= new Socket("localhost",1234);
			BufferedReader in=new BufferedReader(new InputStreamReader(skt.getInputStream()));
			System.out.println("Received string: ");
			while(!in.ready()){}
			System.out.println(in.readLine());
			System.out.println("\n");
			in.close();
            skt.close();
		}
		catch(Exception e){
			System.out.print("Error");
		}
	}
}
