import java.io.*;
import java.net.*;
class server{
	public static void main(String args[]){
		String data ="Network Lab";
		try{
			ServerSocket srvr=new ServerSocket(1234);
			Socket skt= srvr.accept();
			System.out.println("Server has connected!!!\n");
			PrintWriter out=new PrintWriter(skt.getOutputStream(), true);
			System.out.print("Sending String: "+data+"\n");
			out.print(data);
			out.close();
			skt.close();
			srvr.close();
		}
		catch(Exception e){
			System.out.println("It didn't work");
		}
	}
}
