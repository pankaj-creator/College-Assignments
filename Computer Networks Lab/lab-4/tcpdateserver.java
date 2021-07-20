import java.net.*;
import java.io.*;
import java.util.*;
//package CN Lab;

public class tcpdateserver
{
	public static void main(String args[])
	{
		ServerSocket ss=null;
		Socket cs;
		PrintStream ps;
		BufferedReader dis;
		String inet;
		try
		{ 
			ss= new ServerSocket(4444);
			System.out.println("Press Ctrl+C to quit");
			while(true)
			{
				cs=ss.accept();
				ps=new PrintStream(cs.getOutputStream());
				Date d=new Date();
				ps.println(d);
				dis=new BufferedReader(new InputStreamReader(cs.getInputStream()));
				inet=dis.readLine();
				System.out.println("Client System/IP address is:"+inet);
				ps.close();
				dis.close();
			}
		}
				catch(IOException e)				
				{
					System.out.println("The exception is:"+e);
				}
	}
			
	
}	
