import javax.swing.*;
import java.awt.event.*;
import java.awt.*;
public class bimbatchinfo extends JFrame implements ActionListener
{
   JMenu m1,m2,m4,m5;
   JMenuItem n1,n2,n8,sys;
   JMenuBar b;
   
   JLabel l1,l2,l3,l4;
   
                bimbatchinfo(){
                    setTitle("BIM Phone Directory");
                    setSize(700,500);
                    setBackground(Color.YELLOW);
                    setDefaultCloseOperation(JFrame.HIDE_ON_CLOSE);
                    setLayout(new FlowLayout());
                    l1=new JLabel("KCMIT");
                    l2=new JLabel("");
                    l3=new JLabel("");
                    l4=new JLabel("");
                    
                    l1.setForeground(Color.blue);
                    l1.setFont(new Font("Serif", Font.BOLD, 40));
                    l1.setFont(new Font("Serif",Font.ITALIC, 40));
                    l1.setBounds(50,50, 50, 40);
                    
                    l2.setForeground(Color.red);
                    l2.setFont(new Font("Serif", Font.BOLD, 50));
                    l2.setFont(new Font("Serif",Font.ITALIC, 50));
                    
                    l3.setForeground(Color.blue);
                    l3.setFont(new Font("Serif", Font.BOLD, 30));
                    l3.setFont(new Font("Serif",Font.ITALIC, 30));
                    
                    l4.setForeground(Color.red);
                    l4.setFont(new Font("Serif", Font.BOLD, 25));
                    l4.setFont(new Font("Serif",Font.ITALIC, 25));
                    
                    
                   add(l1);
                   add(l2);
                   add(l3);
                   add(l4);
                     b=new JMenuBar();
                    setJMenuBar(b);
                   
                    m1=new JMenu("INSERT");
                    m2=new JMenu("SEARCH");
                    
                    m4 =new JMenu("DELETE");
                    m5=new JMenu("WINDOW");
                    
                    n1=new JMenuItem("insert record");
                    m1.add(n1);
                    
                    n2=new JMenuItem("Student name");
                    m2.add(n2);
                    
                    
                   
                   
                   
                    
                   
                    n8 = new JMenuItem("Student name");
                    m4.add(n8);
                    
                    
                    
                    
                    
                     
                     sys=new JMenuItem("Exit");
                     m5.add(sys);   
                    b.add(m1);
                      b.add(m2);
                    
                      b.add(m4);
                      b.add(m5);
                    
                    setVisible(true);
                    n1.addActionListener(this);
                    n2.addActionListener(this);
                  
                    n8.addActionListener(this);
                    
                    sys.addActionListener(this);
                    
                    
                    
                }
              
                public void actionPerformed(ActionEvent e)
                {
                	if(e.getSource()==n1)
                    {
                        new biminsert();
                        
                    }
                	if(e.getSource()==n2){
                        new bimsearchresultname();
                    }
                    
                    
                    
                     if(e.getSource()==n8)
                     {
                         new bimnamedelete();
                         
                     }
                                        
                    
                    if(e.getSource()==sys){
                        dispose();
                    }
                }
                
                public static void main(String[] args)
                {
              new bimbatchinfo();
                 }
}
   