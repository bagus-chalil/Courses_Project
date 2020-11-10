package com.example.simpletask;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    private static final String TEXT_STATE = "currentText";
    private TextView mtextview;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        mtextview=(TextView)findViewById(R.id.textview1);
        if(savedInstanceState!=null){
            mtextview.setText(savedInstanceState.getString(TEXT_STATE));
        }
    }

    public void mulaitask(View view) {
        mtextview.setText("Napping...");

        new SimpleTask(mtextview).execute();
    }
    @Override
    protected void onSaveInstanceState(Bundle outState) {
        super.onSaveInstanceState(outState);
        // Save the state of the TextView
        outState.putString(TEXT_STATE, mtextview.getText().toString());
    }
}