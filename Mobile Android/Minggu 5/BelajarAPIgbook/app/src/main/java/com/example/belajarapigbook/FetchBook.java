package com.example.belajarapigbook;

import android.net.Uri;
import android.os.AsyncTask;
import android.os.Build;
import android.widget.EditText;
import android.widget.TextView;

import org.json.JSONArray;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;

public class FetchBook extends AsyncTask<String,Void,String> {
    EditText search1 ;
    TextView mpenulis,mjudul;

    private static final String LOG_TAG = FetchBook.class.getSimpleName();
    public FetchBook(TextView mjudul1, TextView mpenulis1, EditText search2) {
        this.mpenulis = mpenulis1;
        this.mjudul = mjudul1;
        this.search1=search2;
    }
    @Override
    protected String doInBackground(String... params) {
        String queryString = params[0];

        HttpURLConnection urlConnection = null;
        BufferedReader reader = null;
        String bookJSONString = null;

        try {
            final String BOOK_BASE_URL = "https://www.googleapis.com/books/v1/volumes?";
            final String QUERY_PARAM = "q";
            final String MAX_RESULTS = "maxResults";
            final String PRINT_TYPE = "printType";

            Uri builtURI = Uri.parse(BOOK_BASE_URL).buildUpon()
                    .appendQueryParameter(QUERY_PARAM, queryString)
                    .appendQueryParameter(MAX_RESULTS, "10")
                    .appendQueryParameter(PRINT_TYPE, "books")
                    .build();

            URL requestURL =new URL(builtURI.toString());

            urlConnection = (HttpURLConnection) requestURL.openConnection();
            urlConnection.setRequestMethod("GET");
            urlConnection.connect();

            InputStream inputStream = urlConnection.getInputStream();
            StringBuffer buffer = new StringBuffer();
                if (inputStream == null) {

                    return null;
                }
                reader = new BufferedReader(new InputStreamReader(inputStream));
                String line;
                while ((line = reader.readLine()) != null) {
                    buffer.append(line + "\n");
                }
                if (buffer.length() == 0) {
                    return null;
                }
            bookJSONString = buffer.toString();

        } catch (IOException e) {
            e.printStackTrace();
            return null;
        } finally {
            if (urlConnection != null) {
                urlConnection.disconnect();
            }
            if (reader != null) {
                try {
                    reader.close();
                } catch (IOException e) {
                    e.printStackTrace();
                }
            }
        }
        return bookJSONString;
    }
    @Override
    protected void onPostExecute(String s) {
        super.onPostExecute(s);
        try {
            JSONObject jsonObject = new JSONObject(s);
            JSONArray itemsArray = jsonObject.getJSONArray("items");

            for(int i = 0; i<itemsArray.length(); i++){
                JSONObject book = itemsArray.getJSONObject(i);
                String title=null;
                String authors=null;
                JSONObject volumeInfo = book.getJSONObject("volumeInfo");
                try {
                    title = volumeInfo.getString("title");
                    authors = volumeInfo.getString("authors");
                } catch (Exception e){
                    e.printStackTrace();
                }
                if (title != null && authors != null){
                    mjudul.setText(title);
                    mpenulis.setText(authors);
                    return;
                }
            }
            mjudul.setText("No Results Found");
            mpenulis.setText("");
        } catch (Exception e){
            mjudul.setText("No Results Found");
            mpenulis.setText("");
            e.printStackTrace();
        }
    }
}
