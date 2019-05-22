/*
Mark Wagner
Project 03
Recursive Numbers
02/22/19
 */

import java.io.FileWriter;
import java.io.IOException;
import javafx.application.Application;
import javafx.application.Platform;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.RadioButton;
import javafx.scene.control.TextField;
import javafx.scene.control.ToggleGroup;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;

public class Recurse extends Application {

    @Override
    public void start(Stage primaryStage) {

        final ToggleGroup group = new ToggleGroup();
        RadioButton iter = new RadioButton("Iterative");
        RadioButton rec = new RadioButton("Recursive");
        iter.setToggleGroup(group);
        rec.setToggleGroup(group);
        iter.setSelected(true);
        Label lin = new Label("   Input n:");
        TextField nInput = new TextField();
        Label res = new Label("Result");
        TextField resu = new TextField();
        Label efi = new Label("Efficiency");
        TextField effi = new TextField();

        Button cmp = new Button();
        cmp.setText("Compute");
        cmp.setOnAction(new EventHandler<ActionEvent>() {

            @Override
            public void handle(ActionEvent event) {

                String inpt = nInput.getText();
                int iinpt = Integer.parseInt(inpt);
                Sequence.reset();

                if (iter.isSelected()) {
                    Sequence.computeIterative(iinpt);
                    resu.setText(String.valueOf(Sequence.getNum()));
                    effi.setText(String.valueOf(Sequence.getEfficiency()));
                } else {
                    Sequence.computeRecursive(iinpt);
                    resu.setText(String.valueOf(Sequence.getNum()));
                    effi.setText(String.valueOf(Sequence.getEfficiency()));

                }
            }
        });

        GridPane root = new GridPane();

        //Horizontal Box
        HBox topButtons = new HBox();
        topButtons.getChildren().add(iter);
        topButtons.getChildren().add(rec);
        topButtons.getChildren().add(lin);
        topButtons.getChildren().add(nInput);

        HBox bottomButtons = new HBox();
        bottomButtons.getChildren().add(cmp);
        bottomButtons.getChildren().add(res);
        bottomButtons.getChildren().add(resu);
        bottomButtons.getChildren().add(efi);
        bottomButtons.getChildren().add(effi);

        //Placement
        GridPane.setConstraints(topButtons, 0, 0);
        GridPane.setConstraints(bottomButtons, 0, 1);

        //Length (3 Columns, 2 Rows)
        GridPane.setColumnSpan(topButtons, 5);
        GridPane.setColumnSpan(bottomButtons, 6);

        //Add them to the stage
        root.getChildren().add(topButtons);
        root.getChildren().add(bottomButtons);
        root.setVgap(20);
        root.setHgap(40);
        root.setAlignment(Pos.CENTER);

        Scene scene = new Scene(root, 750, 450);

        primaryStage.setTitle("Recursive Numbers");
        primaryStage.setScene(scene);
        primaryStage.show();
        primaryStage.setOnCloseRequest(e -> {
            System.out.println("Result Saved");
            
            String message;
            
            try (FileWriter dataOutput = new FileWriter("outputData.csv")) {
            // output.txt header data
            dataOutput.append("n Input,");
            dataOutput.append("Iterative,");
            dataOutput.append("Recursive");
            dataOutput.append("\n");
 
            // outputData.txt Recursive and Iterative efficiency
            for (int m = 0; m <= 10; m++) {
                dataOutput.append(String.valueOf(m));
                dataOutput.append(",");
                Sequence.computeIterative(m+1);
                dataOutput.append(String.valueOf(Sequence.getEfficiency()));
                dataOutput.append(",");
                Sequence.computeRecursive(m);
                dataOutput.append(String.valueOf(Sequence.getEfficiency()));             
                dataOutput.append("\n");
            }
            dataOutput.flush();
            dataOutput.close();
            System.exit(0);
        } 
        catch (IOException o) {
            message = "Output Exception";
            System.out.print(message);
            System.exit(0);
        }
            
            //Insert a filemaker here
            Platform.exit();
            System.exit(0);
        });
    }

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        launch(args);

    }

}
