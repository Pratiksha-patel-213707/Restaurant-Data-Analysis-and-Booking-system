import java.awt.*;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;
import java.util.*;

public class gui1 {
    Frame f;
    gui1()
    {
        f=new Frame();
        f.setVisible(true);
        f.setSize(800,500);
        f.addWindowListener(new WindowAdapter() {
            @Override
            public void windowClosing(WindowEvent e) {
                f.dispose();
            }
        });
        f.setTitle("java");
        System.out.println("Frame Created");
    }
    public static void main(String[] args) {
      new gui1();
    }
}
