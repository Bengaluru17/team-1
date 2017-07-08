package hk.ust.cse.comp107x.ngoconnect;

import android.app.Fragment;
import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;

import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;

import java.util.ArrayList;


public class register extends Fragment {

    private int id;
    private DatabaseReference mDatabase;
    Button registerbtn;
    private String uid, currentUserName,currentUserEmail,currentphno,currentEventsname;
    private TextView idtext,nametext,phnotext,doctext,dobtext;
    private FirebaseAuth auth;
    private View myView;



    @Nullable
    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        ((AppCompatActivity) getActivity()).getSupportActionBar().setTitle("REGISTRATION FORM");
        myView = inflater.inflate(R.layout.register, container, false);
        //reference to the database
        mDatabase= FirebaseDatabase.getInstance().getReference();
        auth = FirebaseAuth.getInstance();
        uid=auth.getCurrentUser().getUid();

        registerbtn=(Button)myView.findViewById(R.id.registerbutton);
        idtext=(TextView)myView.findViewById(R.id.id);
       nametext=(TextView)myView.findViewById(R.id.name);
        phnotext=(TextView)myView.findViewById(R.id.phnno);
        dobtext=(TextView)myView.findViewById(R.id.dob);
      doctext=(TextView)myView.findViewById(R.id.doc);




        registerbtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //Creating firebase object

                mDatabase= FirebaseDatabase.getInstance().getReference();


                //Getting values to store
                String id = idtext.getText().toString().trim();
                String name = nametext.getText().toString().trim();
                String phno =phnotext.getText().toString().trim();
                String doc = doctext.getText().toString().trim();
                String dob = dobtext.getText().toString().trim();


                //Creating Person object
                FormDetails form = new FormDetails();

                //Adding values
                form.setid(id);
                form.setName(name);
                form.setphno(phno);
                form.setdob(dob);
                form.setdoc(doc);

                //Storing values to firebase
                mDatabase.child("applicant").setValue(form);

                Intent j = new Intent(getActivity(), LoginScreen.class);
                j.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK | Intent.FLAG_ACTIVITY_CLEAR_TASK);
                startActivity(j);

            }
        });

        mDatabase.child("try").addListenerForSingleValueEvent(new ValueEventListener() {
            @Override
            public void onDataChange(DataSnapshot dataSnapshot) {
                int flag=0;
                for(DataSnapshot mdataSnapshot :dataSnapshot.getChildren())
                {
                    if(mdataSnapshot.getKey().equals(bookName))
                    {

                        ArrayList<String> x=(ArrayList<String>)mdataSnapshot.getValue();
                        // x.add(bookId);
                        x.add(uid);

                        mDatabase.child("DATA").child(bookName).setValue(x);
                        flag=1;  //make flag 1 if book exists
                    }

                }
                if(flag==0)  //book doesn't exist
                {
                    {
                        Log.d(TAG,"new book addded ");
                        ArrayList<String> x=new ArrayList<String>();
                        // x.add(bookId);
                        x.add(uid);
                        Log.d(TAG,"new owner array: "+x.toString());
                        mDatabase.child("DATA").child(bookName).setValue(x);
                    }
                }
            }

            @Override
            public void onCancelled(DatabaseError databaseError) {

            }
        });
        // finish();



        return myView;

    }




}
