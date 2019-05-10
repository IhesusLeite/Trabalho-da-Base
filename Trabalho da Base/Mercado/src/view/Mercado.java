
package view;

import java.io.IOException;
import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

/**
 *
 * @author localhost
 */
public class Mercado extends Application {
    
    @Override
    public void start(Stage primaryStage) throws IOException {
       
        Parent fxmlCadastror = FXMLLoader.load(getClass().getResource("FXMLCadastror.fxml"));
        Scene scene = new Scene(fxmlCadastror);
        primaryStage.setResizable(false);
        primaryStage.setTitle("Mercadinho Java");
        primaryStage.setScene(scene);
        primaryStage.show();
    }
    public static void main(String[] args) {
        launch(args);
    }
    
}
