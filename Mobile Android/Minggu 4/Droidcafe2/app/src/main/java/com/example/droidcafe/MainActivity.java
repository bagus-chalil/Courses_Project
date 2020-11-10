package com.example.droidcafe;

import android.content.Context;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;

import com.google.android.material.floatingactionbutton.FloatingActionButton;
import com.google.android.material.snackbar.Snackbar;

import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;

import android.view.View;

import android.view.Menu;
import android.view.MenuItem;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Toolbar toolbar = findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        FloatingActionButton fab = findViewById(R.id.fab);
        fab.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent();
                intent.setAction(Intent.ACTION_VIEW);
                // Using the coordinates for Google headquarters.
                String data = getString(R.string.google_mtv_coord_zoom12);
                intent.setData(Uri.parse(data));
                if (intent.resolveActivity(getPackageManager()) != null) {
                    startActivity(intent);
                }
            }
        });
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_order) {
            Context messageA = getApplicationContext();
            Toast toast = Toast.makeText(messageA, getString(R.string.action_order_message), Toast.LENGTH_LONG);
            toast.show();
            return true;
        }else if(id == R.id.action_contact){
            Context messageB = getApplication();
            Toast toast=Toast.makeText(messageB,getString(R.string.action_contact_message),Toast.LENGTH_LONG);
            toast.show();
        }else if (id == R.id.action_favourite){
            Context messageC =getApplication();
            Toast toast=Toast.makeText(messageC,getString(R.string.action_favourite_message),Toast.LENGTH_LONG);
            toast.show();
        }else if (id == R.id.action_status){
            Context messageD=getApplication();
            Toast toast=Toast.makeText(messageD,getString(R.string.action_status_message),Toast.LENGTH_LONG);
            toast.show();
        }

        return super.onOptionsItemSelected(item);
    }

    public void btn_nitendo(View view) {
        Context message1 = getApplicationContext();
        Toast toast = Toast.makeText(message1, getString(R.string.messaga1), Toast.LENGTH_LONG);
        toast.show();
    }

    public void btn_xbox(View view) {
        Context message2 = getApplicationContext();
        Toast toast = Toast.makeText(message2, getString(R.string.messaga2), Toast.LENGTH_LONG);
        toast.show();
    }

    public void btn_ps(View view) {
        Context message3 = getApplicationContext();
        Toast toast = Toast.makeText(message3, getString(R.string.messaga3), Toast.LENGTH_LONG);
        toast.show();
    }

}